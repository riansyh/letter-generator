const putMessage = (data) => {
    document.getElementById("opening").value = data.data.opening;
    document.getElementById("main").value = data.data.main;
    document.getElementById("closing").value = data.data.closing;
};

const changeContent = () => {
    const value = document.getElementById("option").value;
    fetch(`/api/letter/${value}`, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
            url: "/api/letter",
        },
    })
        .then((response) => response.json())
        .then((data) => putMessage(data))
        .catch((error) => console.log(error));
};

fetch("/api/letter", {
    method: "GET",
    headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
        url: "/api/letter",
    },
})
    .then((response) => response.json())
    .then((data) => showTemplates(data))
    .catch((error) => console.log(error));

const showTemplates = (data) => {
    data.data.forEach((template) => {
        document.querySelector("#option").innerHTML += `
                <option value="${template.id}">${template.name}</option>
                `;
    });
};
