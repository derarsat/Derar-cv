<template>
  <div class="section">
    <div class="icon">
      <skills-icon></skills-icon>
      <span>Skills</span>
    </div>
    <div class="content">
      <div
        class="relative pt-1 ml-2"
        v-for="language in languages"
        :key="language.name"
      >
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
              {{ language.name }}
            </span>
          </div>
          <div class="text-right">
            <span class="text-xs font-black inline-block">
              {{ language.value }} %
            </span>
          </div>
        </div>
        <div class="overflow-hidden h-2 mb-4 text-xs rounded flex bg-white">
          <div
            :style="'width:' + language.value + '%'"
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

const SkillsIcon = defineAsyncComponent(() =>
  import(/* webpackChunkName: "SkillsIcon" */ "@/components/icons/SkillsIcon")
);
export default {
  components: {
    SkillsIcon,
  },
  data: () => {
    return {
      name: "LanguagesBlock",
      languages: [
        {
          name: "Vue.js",
          value: 90,
        },
        {
          name: "React",
          value: 70,
        },
        {
          name: "javaScript & Typescript",
          value: 70,
        },
        {
          name: "PHP & SQL",
          value: 70,
        },
        {
          name: "Laravel",
          value: 85,
        },

        {
          name: "Flutter & Dart",
          value: 70,
        },

        // {
        //   name: "Python & Django",
        //   value: 60,
        // },
        // {
        //   name: "Firebase & Firestore",
        //   value: 60,
        // },

        {
          name: "CSS & SCSS",
          value: 85,
        },
        {
          name: "JQuery, Bootstrap, Bulma, Tailwindcss, Vuetify",
          value: 80,
        },
      ],
    };
  },
};
</script>
