document.addEventListener("alpine:init", () => {
    Alpine.data("otpTimer", ({ timeLeft }) => ({
        timeLeft: Math.max(0, timeLeft ?? 60),
        timer: null,

        init() {
            if (this.timeLeft > 0) {
                this.startTimer();
            }
        },

        startTimer() {
            this.timer = setInterval(() => {
                this.timeLeft--;
                if (this.timeLeft <= 0) {
                    clearInterval(this.timer);
                }
            }, 1000);
        },
    }));
});
