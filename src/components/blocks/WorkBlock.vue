<template>
  <div class="section">
    <div class="icon">
      <work-icon></work-icon>
      <span>Work experience</span>
    </div>
    <div class="content">
      <div class="pl-2 mb-4 mt-2" v-for="w in work" :key="w.period">
        <h5 class="text-lg text-indigo-400 uppercase font-bold">
          <span>
            {{ w.name }}
          </span>
          <span
            v-html="w.period"
            class="inline-block ml-2 text-gray-600 font-light text-sm"
          ></span>
        </h5>
        <h6
          v-text="w.value"
          class="
            text-xs
            mt-2
            mb-4
            bg-indigo-400
            inline-block
            text-white
            p-2
            rounded
          "
        ></h6>
        <ul class="list-disc ml-4">
          <li
            class="mb-2"
            v-for="section in w.sections"
            :key="section"
            v-text="section"
          ></li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
import { defineAsyncComponent } from "vue";
const WorkIcon = defineAsyncComponent(() =>
  import(/* webpackChunkName: "WorkIcon" */ "@/components/icons/WorkIcon")
);
export default {
  components: {
    WorkIcon,
  },
  data: () => {
    return {
      work: [
        {
          name: "Ishtari",
          period: "2019-5-1, currently working here",
          value: "Full stack web developer",
          sections: [
            "Developed a new front-end website from scratch using vue.js",
            "re developed a new front-end website from scratch using react",
            "Worked closely with designers, data entry, and digital marketing employees and built extensions to improve their work-ease",
            "Developed plugins using php and mysql that allows graphic designers to transform their ideas into web pages",
            "Worked with other developers to improve API response time by implementing cache strategies (redis) ",
            "Built dynamic site-theme using Bulma's built-in sass support",
            "Zymta Home : ",
            "   - Built Zymta Home: a cross-platform (ios, android) e-commerce app using flutter",
            "   - Integrated firebase analytics and Facebook app events to retarget customers with the right ads",
            "   - Integrated push notifications service using onesignal SDK",

            // "ALJAREEDA",
            // "   - Built ALJAREEDA: a cross-platform (ios, android) news app using flutter",
            // "   - Added onesignal extention to wordpress website with auto-sende notifications on news add or update",
            // "   - Integrated push notifications service using onesignal SDK",
          ],
        },
        {
          name: "Magazahome",
          period: "2018-3-1 → 2019-3-1",
          value: "Full-stack web developer & desktop application developer",
          sections: [
            "Built real-time search functionality from scratch using php and mysql for more than 1000 products",
            "Integrated cross-browser compatible applications and secure payment gateways in the website using javascript",
            "Developed new plugins to connect the site with other services (shipping companies APIs etc)",
            "Developed a desktop application to manage stock functionalities such as prices, quantities, employees accounting, etc...",
          ],
        },
      ],
    };
  },
};
</script>
