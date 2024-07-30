document.addEventListener("click", () => {
    const signInBtn = document.querySelector("#sign-in-btn");
    const signUnBtn = document.querySelector("#sign-up-btn");
    const box = document.querySelector(".box");

    signInBtn.addEventListener("click", () => {
        box.classList.remove("sign-up-mode");
    });

    signUnBtn.addEventListener("click", () => {
        box.classList.add("sign-up-mode");
    });
});
