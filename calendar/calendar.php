<html>
  <head>
    <meta charset="utf-8" />
    <title>jQuery Datepicker: Disable Future Dates</title>
    <link rel="stylesheet" href="calendar.css" />
    <script src="jquery.js"></script>
    <script src="jqueryUI.js"></script>
    <script type="text/javascript">
      $(function() {
      var date = new Date();
      var currentMonth = date.getMonth();
      var currentDate = date.getDate();
      var currentYear = date.getFullYear();
      $('#datepicker').datepicker({
      maxDate: new Date(currentYear,  currentMonth,  currentDate)
      });
      });
    </script>
  </head>
  <body>
    <p>Date: <input type="text" id="datepicker" /></p>
  </body>
</html>
