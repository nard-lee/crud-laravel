document
    .querySelector("#signup_form")
    .addEventListener("submit", async (event) => {
        event.preventDefault();

        console.log("yes")

        const form = event.target;
        const data = {
            name: form.name.value,
            email: form.email.value,
            password: form.password.value,
        };

        console.log(data)

        try {
            const response = await fetch("/signup", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json",
                    "X-CSRF-TOKEN": document.querySelector(
                        'meta[name="csrf-token"]'
                    ).content,
                },
                body: JSON.stringify(data),
            });

            console.log(response)

            if (response.ok) {
                const res = await response.json();
                console.log(res);
                window.location.href = "/dashboard";
            } else {
                const errorData = await response.json();
                console.log(errorData);
            }
        } catch (error) {}
    });
