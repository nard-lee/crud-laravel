document.addEventListener("DOMContentLoaded", () => {
    document
        .querySelector("#login_form")
        .addEventListener("submit", async (event) => {
            event.preventDefault();

            const form = event.target;
            const data = {
                email: form.email.value,
                password: form.password.value,
            };

            try {
                const response = await fetch("/login", {
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

                if (response.ok) {
                    const res = await response.json();
                    console.log(res)
                    window.location.href = "/dashboard";
                } else {
                    const errorData = await response.json();
                    console.log(errorData);
                }
            } catch (error) {}
        });
});
