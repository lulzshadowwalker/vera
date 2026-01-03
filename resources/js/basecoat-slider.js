(() => {
    const sliders = document.querySelectorAll('input[type="range"].input');
    if (!sliders) return;

    const updateSlider = (el) => {
        const min = parseFloat(el.min || 0);
        const max = parseFloat(el.max || 100);
        const value = parseFloat(el.value);
        const percent = (max === min) ? 0 : ((value - min) / (max - min)) * 100;
        el.style.setProperty('--slider-value', `${percent}%`);
    };

    sliders.forEach(slider => {
        updateSlider(slider);
        slider.addEventListener('input', (event) => updateSlider(event.target));
    });
})();