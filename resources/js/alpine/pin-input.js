document.addEventListener('alpine:init', () => {
    Alpine.data('pin', () => ({
        length: 6,
        value: "",

        get inputs() {
            return this.$refs.container.querySelectorAll('.js-pin-input');
        },

        onInput(e, index) {
            this.value = [...this.inputs].map(input => input.value).join('');
            if (! e.target.value) return;

            const next = this.inputs[index + 1];
            if (! next) return;

            next.focus();
            next.select();
        },

        onPaste(e) {
            e.preventDefault();

            this.inputs.forEach(input => input.value = '');

            const paste = e.clipboardData.getData('text').slice(0, this.length);
            paste.split('').forEach((char, i) => {
                if (! this.inputs[i]) return;

                this.inputs[i].value = char;
            });

            this.value = [...this.inputs].map(input => input.value).join('');
            this.inputs[Math.min(paste.length, this.length - 1)].focus();
        },

        onBackspace(e, index) {
            if (e.target.value) return; 
            if (index <= 0) return;

            this.inputs[index - 1].focus();
            this.inputs[index - 1].select();
        },
    }));
});