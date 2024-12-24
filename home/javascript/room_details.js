$(document).ready(() => {
    // Hide login popup when cancel button is clicked
    $(".cancel_login_popup").click(function () {
        if ($(".login_popup").length) {
            $(".login_popup").fadeOut();
        }
    });

    // Share button functionality
    $(".shareButton").click(function () {
        if (navigator.clipboard) {
            navigator.clipboard.writeText(window.location.href)
                .then(() => {
                    if ($(".share_sucess").length) {
                        $(".share_sucess").fadeIn();
                        setTimeout(() => {
                            $(".share_sucess").fadeOut();
                        }, 1000);
                    }
                })
                .catch(() => {
                    console.error("Failed to copy URL to clipboard");
                    alert("Unable to copy URL. Please try manually.");
                });
        } else {
            alert("Clipboard API is not supported in this browser.");
        }
    });
});
