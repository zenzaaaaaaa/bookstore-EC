const bar = document.getElementById("bar");
const loader = document.getElementById("loader");

// バーをアニメーションで伸ばす
requestAnimationFrame(() => {
  bar.style.width = "100%";
  bar.setAttribute("aria-valuenow", "100");
});

// ページ読み込み完了後にフェードアウト
bar.addEventListener("transitionend", () => {
  loader.classList.add("hide");
  setTimeout(() => loader.remove(), 500);
});
