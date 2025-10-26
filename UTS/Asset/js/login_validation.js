// Pastikan file ini dipanggil setelah jQuery dimuat di HTML
$(document).ready(function() {

    const form = $("#formLogin");
    const username = $("#username");
    const password = $("#password");
    const show = $("#show-password");

    
    show.change(function() {
        password.attr("type", this.checked ? "text" : "password");
    });

    
    $("button").hover(
        function() {
            $(this).animate({ 
                backgroundColor: "#245bb5", 
                width: "+=5px", 
                height: "+=3px" 
            }, 150);
        },
        function() {
            $(this).animate({ 
                backgroundColor: "#3277d8", 
                width: "-=5px", 
                height: "-=3px" 
            }, 150);
        }
    );


    $("button").mousedown(function() {
        $(this).animate({ opacity: 0.8 }, 100);
    }).mouseup(function() {
        $(this).animate({ opacity: 1 }, 100);
    });

    form.on("submit", function(e) {
        e.preventDefault(); 

        const userValue = username.val().trim();
        const passValue = password.val().trim();

        if (userValue === "admin" && passValue === "admin123") {
            alert("Login berhasil! Anda akan diarahkan ke sistem.");
            window.location.href = "mainPage.php";
        } else {
            alert("Username atau password salah!");
        }
    });
});
