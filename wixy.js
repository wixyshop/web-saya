document.getElementById("searchBox").addEventListener("keydown", function(e) {
    if (e.key === "Enter") {
      const keyword = this.value.toLowerCase();

      if (keyword.includes("free fire")) {
        window.location.href = "wa.me/6283181998313";
      } else if (keyword.includes("ml") || keyword.includes("mobile legend")) {
        window.location.href = "https://contohweb.com/mobilelegend";
      } else {
        alert("Game tidak ditemukan!");
      }
    }
  });