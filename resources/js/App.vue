<template>
  <div id="loading-area3" class="loading-page-2">
    <span class="text">YMH-OFFICIEL</span>
  </div>
  <div class="page-wraper">
    <RouterView />
  </div>
</template>

<script setup>

import { ref } from 'vue'

const isVisible = ref(false)

function handleVisibilityChange() {
  if (!isVisible.value) {
    setTimeout(function() {
      document.querySelector('.text').classList.add('show');
    }, 100);
    setTimeout(function() {
      document.getElementById('loading-area3').classList.add('active');
    }, 1500);
    setTimeout(function() {
      document.getElementById('loading-area3').style.display = 'none';
    }, 2000);

    isVisible.value = true;
  }
}

window.addEventListener('load', function() {
  if (document.getElementById('loading-area3')) {

    document.addEventListener("visibilitychange", handleVisibilityChange);

    if (document.getElementById('loading-area3').style.display === 'block') {
      handleVisibilityChange();
    }
  }

  // document.body.addEventListener('keydown', function() {
  //   document.body.classList.add('show-focus-outline');
  // });
  //
  // document.body.addEventListener('mousedown', function() {
  //   document.body.classList.remove('show-focus-outline');
  // });
});

onMounted(() => {
  /* Window Load START */
  handleVisibilityChange()
  /* Window Load END */
})

</script>

<style>

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

.loading-page-2::after, .loading-page-2::before {
  content: "";
  height: 100%;
  width: 100%;
  position: absolute;
  left: 0;
  top: 0;
  -webkit-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}

.loading-page-2::after {
  background-color: var(--primary);
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

