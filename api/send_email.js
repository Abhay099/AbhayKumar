const nodemailer = require('nodemailer');

export default async function handler(req, res) {
  if (req.method !== 'POST') {
    return res.status(405).json({ status: 'error', message: 'Method Not Allowed' });
  }

  const { name, email, service, message } = req.body;

  if (!name || !email || !message) {
    return res.status(400).json({ status: 'error', message: 'Please complete the form and provide a valid email address.' });
  }

  // Configure Nodemailer with your Gmail credentials
  const transporter = nodemailer.createTransport({
    host: 'smtp.gmail.com',
    port: 587,
    secure: false, // true for 465, false for other ports
    auth: {
      user: process.env.SMTP_EMAIL || 'abhay28102003kumar@gmail.com',
      pass: process.env.SMTP_PASSWORD || '',
    },
  });

  try {
    await transporter.sendMail({
      from: '"Website Contact Form" <' + (process.env.SMTP_EMAIL || 'abhay28102003kumar@gmail.com') + '>',
      to: process.env.SMTP_EMAIL || 'abhay28102003kumar@gmail.com', // send to yourself
      replyTo: email,
      subject: `New Inquiry from ${name} - ${service}`,
      text: `You have received a new message from your website contact form.\n\nName: ${name}\nEmail: ${email}\nService of Interest: ${service}\n\nMessage:\n${message}\n`,
    });

    return res.status(200).json({ status: 'success', message: 'Your message has been sent successfully. We will be in touch soon.' });
  } catch (error) {
    console.error('Email error:', error);
    return res.status(500).json({ status: 'error', message: 'Message could not be sent. Please try again later.' });
  }
}
