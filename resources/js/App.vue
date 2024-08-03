<template>
  <div v-show='isLoading' class="loading-page-2" :class="{ active: isActive }">
    <div class="text" :class="{ show: isTextVisible }"> YMH-OFFICIEL </div>
  </div>
  <RouterView />
</template>

<script>
export default {
  data() {
    return {
      isLoading: true,
      isActive: false,
      isTextVisible: false
    };
  },
  methods: {
    startAnimation() {
      this.isActive = true;
      setTimeout(() => {
        this.isTextVisible = true;
      }, 300); // Delay before showing the text animation
    },
    stopAnimation() {
      this.isActive = false;
      this.isTextVisible = false;
      setTimeout(() => {
        this.isLoading = false;
      }, 2000)
    }
  },
  mounted() {
    this.startAnimation();
    // Stop the animation after 3 seconds (3000 milliseconds)
    setTimeout(() => {
      this.stopAnimation();
    }, 3000);
  }
};
</script>

<style scoped>
.loading-page-2 {
  position: fixed;
  left: 0;
  top: 0;
  z-index: 999999999;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #000;
}

.loading-page-2 .text {
  font-size: 32px;
  color: #fff;
  z-index: 1;
  font-weight: 600;
  letter-spacing: 5px;
}

.loading-page-2 .text.show {
  opacity: 0;
  animation-name: zoomLoader;
  animation-timing-function: linear;
  animation-duration: 2s;
  animation-iteration-count: 1;
}

@media only screen and (max-width: 991px) {
  .loading-page-2 .text {
    font-size: 18px;
    letter-spacing: 2px;
  }
}

@media only screen and (max-width: 575px) {
  .loading-page-2 .text {
    font-size: 14px;
  }
}

.loading-page-2::after,
.loading-page-2::before {
  content: "";
  height: 100%;
  width: 100%;
  position: absolute;
  left: 0;
  top: 0;
  transition: all 0.8s;
}

.loading-page-2::after {
  background-color: var(--primary, #3498db);
}

.loading-page-2::before {
  background-color: #fff;
}

.loading-page-2.active::after {
  width: 0;
  transition-delay: 0.1s;
  transform: translateX(-5vh);
}

.loading-page-2.active::before {
  width: 0;
  transition-delay: 0.2s;
  transform: translateX(-5vh);
}

@keyframes zoomLoader {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  15% {
    transform: scale(5);
  }
  25% {
    transform: scale(9);
  }
  35% {
    transform: scale(12);
  }
  45% {
    transform: scale(15);
  }
  55% {
    transform: scale(18);
  }
  65% {
    transform: scale(18) translateX(-20%);
  }
  75% {
    transform: scale(18) translateX(-40%);
  }
  85% {
    transform: scale(18) translateX(-60%);
  }
  95% {
    transform: scale(18) translateX(-80%);
    opacity: 1;
  }
  100% {
    transform: scale(18) translateX(-100%);
  }
}
</style>
