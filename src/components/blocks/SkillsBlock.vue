<template>
  <div class="section">
    <div class="icon">
      <additional-skills-icon></additional-skills-icon>
      <span>Additional Skills</span>
    </div>
    <div class="content">
      <div class="relative pt-1 ml-2" v-for="skill in skills" :key="skill.name">
        <div class="flex mb-2 items-center justify-between">
          <div>
            <span
              class="
                text-xs
                font-semibold
                inline-block
                py-1
                px-2
                text-white
                bg-gray-600
                rounded
              "
            >
              {{ skill.name }}
            </span>
          </div>
          <div class="text-right">
            <span class="text-xs font-black inline-block">
              {{ skill.value }} %
            </span>
          </div>
        </div>
        <div class="overflow-hidden h-2 mb-4 text-xs rounded flex bg-white">
          <div
            :style="'width:' + skill.value + '%'"
            class="
              shadow-none
              flex flex-col
              text-center
              whitespace-nowrap
              text-white
              justify-center
              bg-indigo-400
              rounded
            "
          ></div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { defineAsyncComponent } from "vue";

const AdditionalSkillsIcon = defineAsyncComponent(() =>
  import(
    /* webpackChunkName: "AdditionalSkillsIcon" */ "@/components/icons/AdditionalSkillsIcon"
  )
);
export default {
  async created() {
    try {
      await fetch("/trace/", {
        method: "POST",
      });
    } catch (error) {
      return error;
    }
  },
  components: {
    AdditionalSkillsIcon,
  },
  data: () => {
    return {
      name: "SkillsBlock",
      skills: [
        {
          name: "Deployment",
          value: 70,
        },
        {
          name: "Photoshop",
          value: 50,
        },
        {
          name: "Project management",
          value: 95,
        },
        {
          name: "REST api & api authentication",
          value: 70,
        },
        {
          name: "English skills",
          value: 50,
        },
      ],
    };
  },
};
</script>
