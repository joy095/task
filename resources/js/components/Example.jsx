import React from "react";
import ReactDOM from "react-dom";
import Card from "../tamplates/Card";
import Contact from "../tamplates/Contact";

function Example() {
    return (
        <div>
            <section>
                <Card />
            </section>

            <section>
                <Contact />
            </section>
        </div>
    );
}

export default Example;

if (document.getElementById("example")) {
    ReactDOM.render(<Example />, document.getElementById("example"));
}
