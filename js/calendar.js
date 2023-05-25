(function($) {
  'use strict';
  $(function() {
    if ($('#calendar').length) {
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,basicWeek,basicDay'
        },
        defaultDate: '2022-06-12',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [{
            title: '10.00 AM',
            start: '2017-07-08'
          },
          {
            title: '10.00 AM',
            start: '2017-07-01',
            end: '2012-07-07'
          },
          {
            id: 999,
            title: '10.00 AM',
            start: '2017-07-09T16:00:00'
          },
          {
            id: 999,
            title: '10.00 AM',
            start: '2017-07-16T16:00:00'
          },
          {
            title: '10.00 AM',
            start: '2017-07-11',
            end: '2017-07-13'
          },
          {
            title: '10.00 AM',
            start: '2017-07-12T10:30:00',
            end: '2017-07-12T12:30:00'
          },
          {
            title: '10.00 AM',
            start: '2017-07-12T12:00:00'
          },
          {
            title: '10.00 AM',
            start: '2017-07-12T14:30:00'
          },
          {
            title: '10.00 AM',
            start: '2017-07-12T17:30:00'
          },
          {
            title: '10.00 AM',
            start: '2017-07-12T20:00:00'
          },
          {
            title: '10.00 AM',
            start: '2017-07-13T07:00:00'
          },
          {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2017-07-28'
          }
        ]
      })
    }
  });
})(jQuery);