<?php
if (isset($js)) {
    Load::js($js);
}
?>
<script>
    const url = "http://localhost/logiciel/";

    function insert(receiver, direction, formData) {
        $.ajax({
                url: url + receiver,
                type: "post",
                data: formData,
                contentType: false,
                processData: false
            })
            .done(function(res) {
                if (res.status === "success") {
                    alert("ok");
                    window.location.href = url + direction;
                    Swal.fire("Subscribed!", "Your file has been deleted.", "success");
                }
            })
            .fail(function() {
                alert("something went wrong");
            });
    }

    $(document).ready(function() {
        $(document.body).on("submit", "#formUser", function(prevent) {
            prevent.preventDefault();
            insert("User/insert", "", new FormData($(this)[0]))
        })

        selectImg("#photo");
    })
</script>
</body>

</html>