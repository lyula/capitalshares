<div class="col-lg-12">
    <div class="alert alert-info" style="width:100%; max-width:100%; word-wrap: break-word;">
        <b>Share affiliate link:</b>
        <p id="affiliateLink">http://localhost/capitalshares/register.php?ref=<?= sqlValue("SELECT refferal_code FROM users WHERE id='{$_SESSION['user_id']}'"); ?></p>
        <button onclick="copyToClipboard()" class="btn btn-sm" style="border:black">Copy link</button>
    </div>
</div>

<script>
    function copyToClipboard() {
        var copyText = document.getElementById("affiliateLink");
        var textArea = document.createElement("textarea");
        textArea.value = copyText.textContent;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand("copy");
        document.body.removeChild(textArea);
        alert("URL copied to clipboard!");
    }
</script>
