const darkModeToggle = document.getElementById("dark-mode-toggle");
const darkModeToggle1 = document.getElementById("dark-mode-toggle1");

function setThemePreference(themeIndex) {
    localStorage.setItem("theme", themeIndex);
}

function getThemePreference() {
    if (localStorage.getItem("theme") == 0) {
        return parseInt(localStorage.getItem("theme"));
    }
    return null;
}

var currentTheme = getThemePreference();

function toggleDarkMode() {
    if (currentTheme === 0) {
        const link = document.createElement("link");
        link.id = "dark-theme";
        link.rel = "stylesheet";
        link.href = "./scss/dark.css";
        document.head.appendChild(link);
        darkModeToggle.src = "./images/adjust.svg";
        darkModeToggle1.src = "./images/adjust.svg";
    } else {
        const link = document.getElementById("dark-theme");
        if (link) {
            link.remove();
        }
        darkModeToggle.src = "./images/adjust-dark.svg";
        darkModeToggle1.src = "./images/adjust-dark.svg";
    }
}

toggleDarkMode();


darkModeToggle.addEventListener("click", () => {
    if (currentTheme == 0) {
        currentTheme = 1;
    } else {
        currentTheme = 0;
    }
    toggleDarkMode();
    setThemePreference(currentTheme);
});

darkModeToggle1.addEventListener("click", () => {
    if (currentTheme == 0) {
        currentTheme = 1;
    } else {
        currentTheme = 0;
    }
    toggleDarkMode();
    setThemePreference(currentTheme);
});


