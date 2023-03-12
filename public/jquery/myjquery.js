$(window).ready(function() {
  $('#rb-terima').click(function() { 
      // alert('hello Terima');          
      $("#proses").hide();
      $("#tolak").hide();
      $("#terima").show();
  });
  $('#rb-proses').click(function() { 
      // alert('hello Proses'); 
      $("#terima").hide();          
      $("#tolak").hide();
      $("#proses").show();
  });
  $('#rb-tolak').click(function() { 
      // alert('hello Tolak'); 
      $("#terima").hide();
      $("#proses").hide();
      $("#tolak").show();
  });
});
