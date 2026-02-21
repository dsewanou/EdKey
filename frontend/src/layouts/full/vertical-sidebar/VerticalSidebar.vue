<script setup lang="ts">
import { computed, onMounted, ref } from "vue";
import { useAuthStore } from '@/stores/auth'; // store Pinia
import {
  Sidebar,
  SidebarHeader,
  SidebarContent,

  SidebarMenu,
} from "@/components/ui/sidebar";
import sidebarItems, { type menu } from "./sidebarItems";

import simplebar from "simplebar-vue";

import LayoutVerticalSidebarNavGroup from "./NavGroup/NavGroup.vue";
import LayoutVerticalSidebarNavCollapse from "./NavCollapse/NavCollapse.vue";
import LayoutVerticalSidebarNavItems from "./NavItems/NavItems.vue";


import LayoutLogo from "../logo/Logo.vue";

const isHovered = ref(false);
const authStore = useAuthStore();
onMounted(() => {
  const wrapper = document.querySelector(".sidebar-wrapper");
  const sidebar = document.querySelector('[data-slot="sidebar"]');

  if (!wrapper || !sidebar) return;

  let wasExpandedByHover = false;

  wrapper.addEventListener("mouseenter", () => {
    if (sidebar.getAttribute("data-state") === "collapsed") {
      sidebar.setAttribute("data-state", "expanded");
      sidebar.removeAttribute("data-collapsible");
      wasExpandedByHover = true;
      isHovered.value = true;
    }
  });

  wrapper.addEventListener("mouseleave", () => {
    if (wasExpandedByHover) {
      sidebar.setAttribute("data-state", "collapsed");
      sidebar.setAttribute("data-collapsible", "icon");
      wasExpandedByHover = false;
      isHovered.value = false;
    }
  });


});

const filteredMenu = computed(() => {
  const userRole = authStore.role; // 'admin', 'parent', 'student' ou null

  // Fonction interne pour filtrer récursivement
  const filterItems = (items: menu[]) => {
    return items
      .filter((item) => {
        // RÈGLE : Si l'attribut roles n'existe pas ou est vide, c'est public
        const isPublic = !item.roles || item.roles.length === 0;
        
        // RÈGLE : Si l'utilisateur possède l'un des rôles requis
        const hasPermission = userRole && item.roles?.includes(userRole);

        return isPublic || hasPermission;
      })
      .map((item) => {
        // Si l'élément a des enfants, on applique le même filtre sur les enfants
        if (item.children && item.children.length > 0) {
          return {
            ...item,
            children: filterItems(item.children) // Appel récursif
          };
        }
        return item;
      });
  };

  return filterItems(sidebarItems);
});



</script>

<template>
  <Sidebar data-slot="sidebar" collapsible="icon" class="sidebar  bg-card pb-6"
    :class="{ 'shadow-sm z-[41] fixed': isHovered }" side="left">
    <!-- Brand Logo -->
    <SidebarHeader class="pt-6 pb-5 px-0 relative flex items-center justify-start overflow-hidden">
      <LayoutLogo />
    </SidebarHeader>

    <SidebarContent class="overflow-hidden">
      <simplebar class="h-[calc(100vh_-_100px)]">
        <SidebarMenu>
          <template v-for="item in filteredMenu" :key="item.title">
            <LayoutVerticalSidebarNavGroup v-if="item.header" :item="item" />
            <LayoutVerticalSidebarNavCollapse :item="item" :level="0" v-else-if="item.children" />

            <LayoutVerticalSidebarNavItems v-else :item="item" />
          </template>
        </SidebarMenu>
      </simplebar>
    </SidebarContent>
  </Sidebar>
</template>
