document.addEventListener("DOMContentLoaded", function() {
    var avatar = document.getElementById("avatar");
    var dropdownMenu = document.getElementById("dropdown");

    // Hiển thị dropdown menu khi bấm vào phần tên người dùng
    avatar.addEventListener("click", function(event) {
        event.stopPropagation(); // Ngăn sự kiện click lan rộng

        if (dropdownMenu.style.display === "block") {
            dropdownMenu.style.display = "none";
        } else {
            dropdownMenu.style.display = "block";
        }
    });

    // Ẩn dropdown menu khi bấm ra ngoài
    window.addEventListener("click", function(event) {
        if (!avatar.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.style.display = "none";
        }
    });
});
