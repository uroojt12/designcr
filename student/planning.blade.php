<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Lesson</title>
        <?php include_once('../components/site-head.php') ?>

        <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
        <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar-scheduler/1.9.4/scheduler.min.css'
            rel='stylesheet' />
        <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar-scheduler/1.9.4/scheduler.min.js'></script>
        {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
        <link href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </head>

    <body class="cut-bg">
        <div class="page-container">
            <?php include_once('../components/sidebar.php') ?>

            <div class="main-content">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <x-students.header></x-students.header>
                <main>
                    <section class="sec_lesson-inner">
                        <div id='calendar' style="max-width:100% !important"></div>

                    </section>
                </main>
            </div>
        </div>




        <script>
        $(document).ready(function() {
            var totalHoursScheduled = 0;

            $('#calendar').fullCalendar({
                schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
                editable: true,
                selectable: true,
                eventDurationEditable: false,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                selectAllow: function(selectInfo) {
                    var start = selectInfo.start;
                    var end = selectInfo.end;

                    // Check if the selection includes Saturday or Sunday
                    if (start.day() === 0 || start.day() === 6 || end.day() === 0 || end.day() ===
                        6) {
                        return false; // Disallow selection
                    }
                    return true; // Allow selection
                },
                select: function(start, end) {
                    var duration = end.diff(start, 'hours', true);

                    // if (totalHoursScheduled + duration > 6) {
                    //     alert('Cannot schedule more than 6 hours.');
                    //     $('#calendar').fullCalendar('unselect');
                    // } else {
                    //     totalHoursScheduled += duration;
                    //     $('#calendar').fullCalendar('renderEvent', {
                    //         title: 'Lesson',
                    //         start: start,
                    //         end: end
                    //     }, true); // stick the event
                    // }

                    // Open the modal
                    $('#scheduleModal').modal('show');

                    // Format the selected date and display it in the modal
                    // var selectedDate = start.format('YYYY-MM-DD');
                    // $('#scheduleModal .modal-body').html('You have selected: ' + selectedDate);

                    // // Save the date for later use when saving changes (if needed)
                    // $('#scheduleModal').data('selectedStart', start);
                    // $('#scheduleModal').data('selectedEnd', end);
                },
                eventRender: function(event, element) {
                    // Update total hours on event render
                    totalHoursScheduled += event.end.diff(event.start, 'hours', true);
                },
                eventAfterAllRender: function(view) {
                    // Calculate total hours after all events are rendered
                    totalHoursScheduled = 0;
                    var events = $('#calendar').fullCalendar('clientEvents');
                    events.forEach(function(event) {
                        totalHoursScheduled += event.end.diff(event.start, 'hours', true);
                    });
                }
            });
        });
        </script>
    </body>

</html>