document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'dayGrid' ],
        defaultView: 'dayGridMonth',
        fixedWeekCount: Boolean, default: true,
        height: 370,
        contentHeight: 4,
        locale: 'pt',
        events: [{
            id: 1,
            title: 'Serviço',
            start: new Date(2019, 8, 11),
            allDay: false,
            className: 'info'
        }],
        header: {
            center: '',
            right: 'today, prev, next'
        }

    });

    calendar.render();
});