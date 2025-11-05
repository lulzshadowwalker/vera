const htmlElement = document.documentElement;

const __FRANKEN__ = JSON.parse(localStorage.getItem("__FRANKEN__") || "{}");

if (
    __FRANKEN__.mode === "dark" ||
    (!__FRANKEN__.mode &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    htmlElement.classList.add("dark");
} else {
    htmlElement.classList.remove("dark");
}

htmlElement.classList.add(__FRANKEN__.theme || "uk-theme-slateblue");
htmlElement.classList.add(__FRANKEN__.radii || "uk-radii-md");
htmlElement.classList.add(__FRANKEN__.shadows || "uk-shadows-sm");
htmlElement.classList.add(__FRANKEN__.font || "uk-font-md");
htmlElement.classList.add(__FRANKEN__.chart || "uk-chart-default");

function toggleTheme() {
    let __FRANKEN__ = JSON.parse(localStorage.getItem("__FRANKEN__") || "{}");

    if (
        __FRANKEN__.mode === "dark" ||
        (!__FRANKEN__.mode &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
        htmlElement.classList.remove("dark");
        __FRANKEN__.mode = "light";
    } else {
        __FRANKEN__.mode = "dark";
        htmlElement.classList.add("dark");
    }

    console.log(__FRANKEN__);

    localStorage.setItem("__FRANKEN__", JSON.stringify(__FRANKEN__));
}

window.toggleTheme = toggleTheme;
