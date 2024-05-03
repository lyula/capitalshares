<footer style="display:flex;justify-content:center;">
    <p id="copyright">All Rights Reserved @ Capital Shares LTD</p>
</footer>

<script>
    // Get the current year
    var currentYear = new Date().getFullYear();
    
    // Update the footer text to include the current year
    document.getElementById("copyright").innerHTML +=
        " " + currentYear;
</script>
