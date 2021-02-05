@extends('layouts.personal')

    @section('meta')
        <title>My Schedules | Complete Choice</title>
        <meta name="description" content="Workday my schedules, view my schedule records, view present and previous schedules.">
    @endsection

    @section('styles')
        <link href="{{ asset('/assets/vendor/air-datepicker/dist/css/datepicker.min.css') }}" rel="stylesheet">
    @endsection

    @section('content')
 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <h2 class="page-title">{{ __("My Schedules") }}</h2>
			
             <i class="ui icon user outline"></i><span class="navmenutext">@isset(Auth::user()->name) {{ Auth::user()->name }} @endisset</span>
			 

			 
            </div>  
        </div>
    </div>
	
	<html>
<head>
<style>


.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.container {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 1.25%; /* 16:9 Aspect Ratio */
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}


</style>
</head>
<body>




</body>
</html>

	<div>
   <li class="">
             
             
                        <i class="ui icon calendar  outline"></i>
					<button class="button" onClick="passWord()" style="vertical-align:middle"><span>View Roster </span></button> 
                    </a>
			
				   <div id="wrapper"></div>

    @endsection
    
    @section('scripts')
    <script src="{{ asset('/assets/vendor/air-datepicker/dist/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/air-datepicker/dist/js/i18n/datepicker.en.js') }}"></script>
    <script src="{{ asset('/assets/vendor/momentjs/moment.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/momentjs/moment-timezone-with-data.js') }}"></script>



<SCRIPT>
function passWord() {
var testV = 1;
var pass1 = prompt('Enter Your Employee ID','@isset(Auth::user()->idno){{Auth::user()->idno}}@endisset');
while (testV < 3) {
if (!pass1)
history.go(-1);

if (pass1.toLowerCase() == "02") {
  

// Storing HTML code block in a variable
var codeBlock = 
			
				'<div class="content">' +
                    '<div class="container">'+
                    '<iframe src="https://docs.google.com/spreadsheets/d/1AdGYsaqs6tEEp1GHabC2FeI3NjqEDGExJR0v-MiQzVA/edit?usp=sharing" height="800" width="1000" title="Iframe Example"></iframe>' +
                '</div>';+
				  '</div>';

// Inserting the code block to wrapper element
document.getElementById("wrapper").innerHTML = codeBlock

//window.open('https://docs.google.com/spreadsheets/d/1AdGYsaqs6tEEp1GHabC2FeI3NjqEDGExJR0v-MiQzVA/edit?usp=sharing','_blank');

const myFrame = document.getElementById("myFrame");

break;

}

if (pass1.toLowerCase() == "01") {
  

// Storing HTML code block in a variable
var codeBlock = 
			
				'<div class="content">' +
                    '<div class="container">'+
                    '<iframe src="https://docs.google.com/spreadsheets/d/15BuplaI076ySIyGwA2mCCH7_EES06tOTdsDzizuftPM/edit?usp=sharing" height="800" width="1000" title="Iframe Example"></iframe>' +
                '</div>';+
				  '</div>';

// Inserting the code block to wrapper element
document.getElementById("wrapper").innerHTML = codeBlock

//window.open('https://docs.google.com/spreadsheets/d/1AdGYsaqs6tEEp1GHabC2FeI3NjqEDGExJR0v-MiQzVA/edit?usp=sharing','_blank');

const myFrame = document.getElementById("myFrame");

break;

}


testV+=1;
var pass1 =
prompt('Access Denied - Contact info@completechoice.com.au');
}
if (pass1.toLowerCase()!="password" & testV ==3)
history.go(-1);
return " ";
}
</SCRIPT>


    <script type="text/javascript">
    $('#dataTables-example').DataTable({responsive: true,pageLength: 15,lengthChange: false,searching: false,ordering: true});
    $('.airdatepicker').datepicker({ language: 'en', dateFormat: 'yyyy-mm-dd' });

    $('#filterform').submit(function(event) {
        event.preventDefault();
        var date_from = $('#datefrom').val();
        var date_to = $('#dateto').val();
        var url = $("#_url").val();

        $.ajax({
            url: url + '/get/personal/schedules',type: 'get',dataType: 'json',data: {datefrom: date_from, dateto: date_to},headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },

            success: function(response) {
                showdata(response);
                function showdata(jsonresponse) {
                    var employee = jsonresponse;
                    var tbody = $('#dataTables-example tbody');
                    
                    // clear data and destroy datatable
                    $('#dataTables-example').DataTable().destroy();
                    tbody.children('tr').remove();

                    // append table row data
                    for (var i = 0; i < employee.length; i++) {
                        // archive status
                        var archive = employee[i].archive;
                        function s_s(archive) {
                            if (archive == '0') {
                                return "Present Schedule";
                            } else if(archive == '1') {
                                return "Past Schedule";
                            }
                        }
                        function ss_color(archive) {
                            if (archive == '0') {
                                return "green";
                            } else if(archive == '1') {
                                return "teal";
                            }
                        }

                        var datefrom = employee[i].datefrom;
                        var dateto = employee[i].dateto;

                        function f_date(format_date)
                        {
                            date = new Date(format_date);
                            year = date.getFullYear();
                            month = date.getMonth();
                            months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
                            d = date.getDate();
                            day = date.getDay();
                            days = new Array('Sunday,', 'Monday,', 'Tuesday,', 'Wednesday,', 'Thursday,', 'Friday,', 'Saturday,');
                            
                            n_date = days[day]+' '+months[month]+' '+d+', '+year;
                            return n_date; 
                        }

                        var intime = moment(employee[i].intime, "hh:mm A");
                        var outime = moment(employee[i].outime, "hh:mm A");
                        var format = {{ $tf }};

                        function tf(f) {
                            if(f == 1) {
                                return "hh:mm A";
                            } else {
                                return "kk:mm";
                            }
                        }

                        function time(p) {
                            if(p == 1) {
                                if(isNaN(intime) !== true) {
                                    return intime.format(tf(format));
                                } 
                            } else {
                                if(isNaN(outime) !== true) {
                                    return outime.format(tf(format));
                                }
                            }
                            return "";
                        }
                            
                        tbody.append("<tr>"+ 
                                        "<td>"+time(1)+"</td>" + 
                                        "<td>"+time(2)+"</td>" + 
                                        "<td>"+employee[i].hours+" hours </td>" + 
                                        "<td>"+employee[i].restday+"</td>" + 
                                        "<td>"+ f_date(datefrom) +"</td>" + 
                                        "<td>"+ f_date(dateto) +"</td>" + 
                                        "<td>"+ "<span class=' "+ ss_color(archive) +"'>" + s_s(archive) + "</span>" +"</td>" + 
                                    "</tr>");
                    }

                    // initialize datatable
                    $('#dataTables-example').DataTable({responsive: true,pageLength: 15,lengthChange: false,searching: false,ordering: true});
                }            
            }
        })
    });
    </script>
    @endsection 