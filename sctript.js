document.addEventListener("DOMContentLoaded", () => {
    const acquaintanceBtn = document.getElementById("acquaintance-btn");
    const familyBtn = document.getElementById("family-btn");
    const formSection = document.getElementById("form-section");
    const acquaintanceForm = document.getElementById("acquaintance-form");
    const familyForm = document.getElementById("family-form");

    acquaintanceBtn.addEventListener("click", () => {
        formSection.style.display = "block";
        familyForm.style.display = "none";
        acquaintanceForm.style.display = "block";
    });

    familyBtn.addEventListener("click", () => {
        formSection.style.display = "block";
        acquaintanceForm.style.display = "none";
        familyForm.style.display = "block";
    });
});
