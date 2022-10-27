<form id="form_later" >
    <label for="fname">First name222:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="date" id="lname" name="lname">
  </form>

  <script> 
    function show_form_later() {
        //document.getElementById("form_today");
        var x = document.getElementById('form_later');
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>