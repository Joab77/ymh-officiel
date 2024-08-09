<template>
<!--  <audio ref="audioPlayer" :src="file" class="d-none" @timeupdate="updateProgress" @loadedmetadata="setDuration" @ended="resetPlayer" />-->
  <button class="dz-play-btn" @click="playAudio" :disabled="isPlaying">
    <span class="dz-play-btnIco"><i class="fa-solid fa-play"></i></span>
  </button>
  <button class="dz-play-btn" @click="pauseAudio" :disabled="!isPlaying">
    <span class="dz-play-btnIco">
      <svg class="svg-inline--fa fa-pause" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pause" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
        <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z"></path>
      </svg>
    </span>
  </button>
  <div class="dzPlayNum">
    <span class="dzPlayCurDuration">{{ formatTime(currentTime) }}</span>
  </div>
  <div class="dz-player-range">
    <span class="under-dz-player-ranger"></span>
    <input ref="progressBar" class="dzPlayRange w-100" type="range" min="0" :max="duration" step="1" v-model="currentTime" @input="seekAudio">
    <span class="change-dz-player-range"></span>
  </div>
  <div class="dzPlayNum">
    <span class="dzPlayDuration">{{ formatTime(duration) }}</span>
  </div>
  <div class="dz-volume-container">
    <span class="dzPlayerVolIcon"><i class="fa fa-volume-up"></i></span>
    <div class="dz-player-range-volume">
      <span class="under-dz-player-ranger"></span>
      <input ref="volumeControl" class="dzPlayVol" type="range" min="0" max="1" step="0.1" v-model="volume" @input="setVolume">
      <span class="change-dz-player-range"></span>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';

// Props
const props = defineProps({
  file: { type: String, required: true }
});

// Refs
const audioPlayer = ref(new Audio(encodeURI(props.file)));
const progressBar = ref(null);
const volumeControl = ref(null);

// State
const isPlaying = ref(false);
const currentTime = ref(0);
const duration = ref(0);
const volume = ref(1);

// Methods
const playAudio = () => {
  audioPlayer.value.play();
  isPlaying.value = true;
};

const pauseAudio = () => {
  audioPlayer.value.pause();
  isPlaying.value = false;
};

const updateProgress = () => {
  currentTime.value = audioPlayer.value.currentTime;
};

const setDuration = () => {
  duration.value = audioPlayer.value.duration;
};

const resetPlayer = () => {
  isPlaying.value = false;
  currentTime.value = 0;
};

const seekAudio = () => {
  audioPlayer.value.currentTime = currentTime.value;
};

const setVolume = () => {
  audioPlayer.value.volume = volume.value;
};

// Watchers
watch(currentTime, (newTime) => {
  progressBar.value.value = newTime;
});

watch(volume, (newVolume) => {
  volumeControl.value.value = newVolume;
});

// Lifecycle
onMounted(() => {
  setVolume(); // Set the initial volume
});

// Helper function
const formatTime = (time) => {
  const minutes = Math.floor(time / 60);
  const seconds = Math.floor(time % 60);
  return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
};
</script>

<style scoped lang='scss'>
</style>
