<template>
  <div class="section">
    <div class="icon">
      <profile-icon></profile-icon>
      <span>Profile</span>
    </div>
    <div class="content">
      <p>
        Innovative optimized solution seeker. Excited to be at the deployment
        phase of my new career as a web developer or a mobile applications
        developer. I am ambitious, adventurous, assiduous, animated.
      </p>
    </div>
  </div>
</template>
<script>
import { defineAsyncComponent } from "vue";

const ProfileIcon = defineAsyncComponent(() =>
  import(/* webpackChunkName: "ProfileIcon" */ "@/components/icons/ProfileIcon")
);
export default {
  name: "ProfileBlock",
  components: {
    ProfileIcon,
  },
};
</script>
