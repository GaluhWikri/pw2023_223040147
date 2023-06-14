const keyword = document.getElementById("keyword");
const searchContainer = document.getElementById("search-container");

// Event ketika kita mengetik keyword
keyword.onkeyup = function () {
  fetch("search.php?keyword=" + keyword.value)
    .then((response) => response.text())
    .then((text) => (searchContainer.innerHTML = text));
};
