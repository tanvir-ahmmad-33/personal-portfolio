import { createRoot } from "react-dom/client";
import { InertiaApp } from "@inertiajs/inertia-react";
import App from "./App.jsx";

const el = document.getElementById("app");

ReactDOM.createRoot(el).render(
    <InertiaApp
        initialPage={JSON.parse(el.dataset.page)}
        resolveComponent={(name) =>
            import(`./Pages/${name}`).then((module) => module.default)
        }
    />,
);
