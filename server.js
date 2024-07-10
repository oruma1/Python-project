const express = require('express');
const bodyParser = require('body-parser');
const session = require('express-session');
const mongoose = require('mongoose');

const app = express();

// Middleware
app.use(bodyParser.json());
app.use(session({
    secret: 'your_secret_key',
    resave: false,
    saveUninitialized: true
}));

// MongoDB connection
mongoose.connect('mongodb://localhost:27017/alive-furnitures', { useNewUrlParser: true, useUnifiedTopology: true });

// User schema and model
const userSchema = new mongoose.Schema({
    username: String,
    password: String,
    wishlist: [String]
});

const User = mongoose.model('User', userSchema);

// Dummy authentication (replace with real authentication)
app.post('/login', async (req, res) => {
    const { username, password } = req.body;
    let user = await User.findOne({ username, password });
    if (!user) {
        user = new User({ username, password, wishlist: [] });
        await user.save();
    }
    req.session.user = user;
    res.json({ success: true });
});

// Wishlist API
app.post('/api/wishlist', async (req, res) => {
    if (!req.session.user) {
        return res.json({ success: false, message: 'Not logged in' });
    }
    const user = await User.findById(req.session.user._id);
    user.wishlist.push(req.body.itemName);
    await user.save();
    res.json({ success: true });
});

// Start server
app.listen(3000, () => {
    console.log('Server running on port 3000');
});
