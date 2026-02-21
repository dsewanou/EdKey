export interface menu {
  header?: string;
  title?: string;
  icon?: any;
  to?: string;
  chip?: string;
  chipBgColor?: string;
  chipColor?: string;
  chipVariant?: string;
  chipIcon?: string;
  children?: menu[];
  disabled?: boolean;
  type?: string;
  subCaption?: string;
  isPro?: boolean;
  roles?: string[];
}

const sidebarItem: menu[] = [
  { header: "Accueil" , roles: ['admin']},
  {
    title: "Toue les modules",
    icon: "home-smile-linear",
    to: "/",
    isPro: false,
    roles: ['admin']
  },

  { header: "INSCRIPTIONS", 
     },
  {
    title: "Tableau de Bord",
    icon: "chart-line-duotone",
    to: "/dashboards/registration",
  },
  {
    title: "Liste des inscriptions",
    icon: "checklist-minimalistic-linear",
    to: "/modules/registrations/list",
    roles: ['admin','parent']
  },
  {
    title: "Enregistrement",
    icon: "document-add-linear",
    to: "#",
    roles: ['admin','parent']
  },
  {
    title: "Gestion des factures",
    icon: "bill-list-linear",
    to: "#",
  },
  {
    title: "Historique de paiement",
    icon: "history-linear",
    to: "#",
  },
];

export default sidebarItem;