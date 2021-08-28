<template>
  <!-- Wrapper -->
  <div class="bg-gray-100 min-h-screen text-gray-500">
    <div class="container mx-auto">
      <div class="xl:flex lg:flex md:block sm:block">
        <div
          class="lg:w-1/2 md:w-full sm:w-full xs:w-full px-4 py-8 inline-block"
        >
          <div class="flex flex-col justify-center items-center">
            <profile-photo></profile-photo>
            <h1 class="text-4xl font-medium my-4 uppercase">Derar Sattouf</h1>
          </div>
          <h3 class="bg-indigo-400 bg-opacity-50 my-2 py-2 text-center rounded">
            Full Stack Web Developer & Mobile App Developer
          </h3>

          <div
            class="
              my-1
              text-center
              bg-indigo-400 bg-opacity-10
              py-2
              rounded
              text-sm
            "
          >
            <a
              class="text-indigo-400 border-r border-gray-300 pr-1 mr-1"
              href="tel:+96176118845"
              >+96176118845</a
            >
            <a
              class="text-indigo-400 border-r border-gray-300 pr-1 mr-1"
              href="mailto:contact@derar.me?subject=direct message from website&body=Hello there!"
              >contact@derar.me</a
            >
            <span>North, Tripoli</span>
          </div>
          <work-block></work-block>
        </div>
        <div
          class="
            lg:w-1/2
            md:w-full
            sm:w-full
            xs:w-full
            bg-gray-400 bg-opacity-5
            px-4
            py-8
            inline-block
            rounded
          "
        >
          <!-- Profile -->
          <profile-block></profile-block>
          <!-- Skills -->
          <languages-block></languages-block>
          <!-- Additional Skills -->
          <skills-block></skills-block>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { defineAsyncComponent } from "vue";

const ProfilePhoto = defineAsyncComponent({
  loader: () =>
    import(/* webpackChunkName: "ProfilePhoto" */ "@/components/ProfilePhoto"),
});
const SkillsBlock = defineAsyncComponent(() =>
  import(
    /* webpackChunkName: "SkillsBlock" */ "@/components/blocks/SkillsBlock"
  )
);
const LanguagesBlock = defineAsyncComponent(() =>
  import(
    /* webpackChunkName: "LanguagesBlock" */ "@/components/blocks/LanguagesBlock"
  )
);
const WorkBlock = defineAsyncComponent(() =>
  import(/* webpackChunkName: "WorkBlock" */ "@/components/blocks/WorkBlock")
);
const ProfileBlock = defineAsyncComponent(() =>
  import(
    /* webpackChunkName: "ProfileBlock" */ "@/components/blocks/ProfileBlock"
  )
);
export default {
  name: "App",
  components: {
    ProfileBlock,
    SkillsBlock,
    LanguagesBlock,
    WorkBlock,
    ProfilePhoto,
  },
};
</script>

<style>
.section {
  @apply pb-4 mb-4;
}
.section .icon {
  @apply text-indigo-400 flex items-center py-4;
}
.section .icon svg {
  @apply fill-current w-11 mr-2;
}
.section .icon span {
  @apply font-semibold;
}
</style>
