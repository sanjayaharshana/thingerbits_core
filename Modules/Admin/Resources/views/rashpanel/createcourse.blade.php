@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))

@section('content_header')   
<h3>Create Course</h3>
@endsection

<style>
.grid .single-grid{position:relative;overflow:hidden;height:130px;padding:0 15px;background:#fff;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.grid .single-grid h4{margin:22px 0}.grid .single-grid span{font-size:26px;margin-top:3px}.grid .single-grid i{font-size:36px;position:absolute;left:15px;bottom:22px;margin:0}.grid .single-grid.total-orders i{color:rgba(0,104,225,.7)}.grid .single-grid.total-sales i{color:rgba(112,124,210,.7)}.grid .single-grid.total-customers i{color:rgba(255,51,102,.7)}.grid .single-grid.total-products i{color:rgba(55,188,155,.7)}.dashboard-panel{margin-top:30px;padding:0 15px;background:#fff;overflow:hidden;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.dashboard-panel .table-responsive{margin-bottom:10px}.grid-header{overflow:auto}.grid-header h4{margin:15px 0;float:left}.grid-header h4 i{margin-right:8px}.sales-analytics{background:#fff;margin-top:30px;padding:0 15px 15px;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.sales-analytics .chart{height:282px!important}.anchor-table .table>tbody>tr>td{padding:0}.anchor-table .table>tbody>tr>td a{display:block;padding:12px 8px;color:#626060;text-decoration:none}.anchor-table .table>tbody>tr>td.empty{text-align:center;padding:10px 0}.anchor-table .table>tbody>tr:hover a{color:#0059bd}.search-terms tbody>tr>td{color:#626060;padding:12px 8px}.search-terms tbody>tr>td.empty{text-align:center;padding:10px 0}@media screen and (max-width:1199px){.single-grid.total-customers,.single-grid.total-products{margin-top:15px}}@media screen and (max-width:767px){.single-grid.total-orders{margin-top:15px}}
</style>

<style>
.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}
.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}
.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>

@section('content')


<form autocomplete="off" method="POST" action="{{ route('insertcourse') }}" enctype="multipart/form-data" id="commentForm">
    {{ csrf_field() }}    
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Course Title</label>
        <input type="text" pattern=".{12,}" required title="3 characters minimum" id="ctitle" class="form-control" placeholder="Course Title" name="course_title" style="" value="" required>
    </div>

    

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Slugg</label>
        <input type="text" class="form-control" id="slugg" placeholder="Slugg" name="slg" style="" value="" required>
    </div>

    <div class="form-group">
        <div class="form-group-prepend">
          <span class="form-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="inputGroupFile01" name="course_img"
            aria-describedby="inputGroupFileAddon01">
        </div>
    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1">Course Intro</label>
        <input type="text" pattern=".{160,}" required title="160 characters minimum" class="form-control" placeholder="Course Intro" name="course_intros" style="" value="" required>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Course Decription</label>
        <input type="text"  pattern=".{160,}" required title="160 characters minimum"  class="form-control" placeholder="Course Discription" name="cours_discrip" style="" value="" required>
    </div>

    <div class="form-group autocomplete" style="width:300px;">
        <label for="exampleFormControlTextarea1">Recommand Products</label>
        <input id="myInput" type="text" class="form-control" placeholder="Title" name="Recommand Products" style="" value="" required>
    </div>
    <br>
    <button type="submit" value="Validate!" class="btn btn-primary">Save</button>
  </form>









<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
    $("#commentForm").validate();

   

</script>







  <script>
      var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

      function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});
}

autocomplete(document.getElementById("myInput"), countries);

  </script>

@endsection