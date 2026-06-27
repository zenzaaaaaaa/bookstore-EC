const name = document.getElementById("register-name"); // 名前input
const password = document.getElementById("register-password"); // パスワードinput
const email = document.getElementById("register-email"); // アドレスinput
const phoneNumber = document.getElementById("register-phone-number"); // 電話番号input
const gender = document.getElementById("gender"); //性別select
const registerBtn = document.getElementById("register-btn"); // 登録フォーム
const registerForm = document.getElementById("register-form"); // 登録フォーム
const errorName = document.getElementById("name-error"); // 名前エラー
const errorPassword = document.getElementById("password-error"); // パスワードエラー
const errorEmail = document.getElementById("email-error"); // アドレスエラー
const errorPhoneNumber = document.getElementById("phone-number-error"); // 電話番号エラー

//全角数字を自動で半角に直す
phoneNumber.addEventListener("input", () => {
  phoneNumber.value = phoneNumber.value.replace(/[０-９]/g, (s) => {
    return String.fromCharCode(s.charCodeAt(0) - 0xfee0);
  });
});

/**
 * inputのバリデーション
 * @returns エラーが一個もなかったらtrue,あったらfalseが返る
 */
function validate() {
  const nameValue = name.value;
  const passwordValue = password.value;
  const emailValue = email.value;
  const phoneNumberValue = phoneNumber.value;
  const phonePattern = /^0\d{9,10}$/; //電話番号正規表現
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // アドレス正規表現
  let errors = [];
  // 前回のエラーを消す
  errorName.textContent = "";
  errorPassword.textContent = "";
  errorEmail.textContent = "";
  errorPhoneNumber.textContent = "";

  // 名前バリデーション
  if (nameValue == "") {
    errors.push("name");
    errorName.textContent = "名前を入力してください";
  }
  // パスワードバリデーション
  if (passwordValue == "") {
    errors.push("password");
    errorPassword.textContent = "パスワードを入力してください";
  } else if (passwordValue.length < 8) {
    errors.push("password");
    errorPassword.textContent = "パスワードは８文字以上で入力してください";
  }
  // アドレスバリデーション
  if (emailValue == "") {
    errors.push("email");
    errorEmail.textContent = "メールアドレスを入力してください";
  } else if (!emailPattern.test(emailValue)) {
    errors.push("email");
    errorEmail.textContent = "正しいメールアドレスの形式で入力してください";
  }
  // 電話番号バリデーション
  if (phoneNumberValue == "") {
    errors.push("phoneNumber");
    errorPhoneNumber.textContent = "電話番号を入力してください";
  } else if (!phonePattern.test(phoneNumberValue)) {
    errors.push("phoneNumber");
    errorPhoneNumber.textContent =
      "ハイフンなしの10桁または11桁で入力してください";
  }
  // エラーなければtrue,あればfalseを返す
  return errors.length == 0;
}
// バリデーション通ったらボタンのテキストを変える
registerBtn.textContent = "送信中...";

// 会員登録フォーム送信
registerForm.addEventListener("submit", async (e) => {
  e.preventDefault();
  registerBtn.disabled = true;
  // エラーがあったら終わり
  if (!validate()) {
    registerBtn.disabled = false;
    return;
  }
  // 入力されたデータをjsonでphpにおくる
  const response = await fetch("/api/auth/register.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      name: name.value,
      email: email.value,
      password: password.value,
      phone: phoneNumber.value,
      gender: gender.value,
    }),
  });
  // phpから戻り値をjsonで受け取る
  const data = await response.json();
});
