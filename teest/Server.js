const express = require("express");
const { PrismaClient } = require("@prisma/client");

const prisma = new PrismaClient();
const app = express();

app.use(express.urlencoded({ extended: true }));
app.use(express.json());

app.post("/upload", async (req, res) => {
    const { name, email } = req.body;
    try {
        const newUser = await prisma.test.create({
            data: {
                name,
                email
            }
        });
        res.json(newUser);
    } catch (error) {
        console.error("Error:", error);
        res.status(500).json({ error: "An error occurred. Please try again." });
    }
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
});
