<?php
include('header.php');
?>

<div class="container">
    <h2 class="text-center">Input fields</h2>
    <div class="main1">
    <div class="inpf">
        <input type="text"> <button onclick="myFunction()" class="btn btn-primary add">Add</button> 
       <p>
       <button class="btn btn-success">Save</button>
       </p> 
    </div>
    </div>
    
</div>
<script>
    
    function myFunction(){  
        var inp = "<div class='inpf'><input  type='text'> <button onclick='myFunction()'  class='btn btn-primary add'>Add</button></div><button class='btn btn-success'>Save</button>";
        $(".main1").append(inp);
    }
</script>
<?php
include('footer.php');
?>