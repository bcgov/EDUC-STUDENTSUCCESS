const addOptionsToVueSelect = () => {
  const select = document.querySelector(
    "#app > div.container > div > form > table > tbody > tr:nth-child(2) > td:nth-child(1) > select",
  );

  if (!select) return;

  const years = ["2024-2025", "2025-2026"];

  years.forEach((year) => {
    if (!Array.from(select.options).some((opt) => opt.value === year)) {
      const option = document.createElement("option");
      option.value = year;
      option.textContent = year;
      option.setAttribute("data-v-3b8a95ca", "");
      select.appendChild(option);
    }
  });

  // Auto-select 2025-2026
  select.value = "2025-2026";

  // Notify Vue of the change
  select.dispatchEvent(
    new Event("change", {
      bubbles: true,
      cancelable: true,
    }),
  );
};
// Relabel gender options; values stay "Male"/"Female" so Vue filtering is unaffected
const relabelGenderOptions = () => {
  const labels = {
    Male: "Man/Boy",
    Female: "Woman/Girl",
  };

  document.querySelectorAll("#app select option").forEach((option) => {
    if (labels[option.value]) {
      option.textContent = labels[option.value];
      // Widen the parent select so the longer labels fit
      option.parentElement.style.minWidth = "10rem";
    }
  });
};
window.addEventListener("load", () => {
  const interval = setInterval(() => {
    const select = document.querySelector(
      "#app > div.container > div > form > table > tbody > tr:nth-child(2) > td:nth-child(1) > select",
    );

    if (select) {
      addOptionsToVueSelect();
      relabelGenderOptions();
      clearInterval(interval);
    }
  }, 300);
});
