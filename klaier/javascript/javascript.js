gapi.load('auth2', function() {
    gapi.auth2.init({
      client_id: 'YOUR_CLIENT_ID',
    });
  });

  const { OAuth2Client } = require('google-auth-library');
const CLIENT_ID = 'YOUR_CLIENT_ID';

const client = new OAuth2Client(CLIENT_ID);

async function verifyGoogleToken(idToken) {
  try {
    const ticket = await client.verifyIdToken({
      idToken: idToken,
      audience: CLIENT_ID,
    });
    const payload = ticket.getPayload();
    return payload;
  } catch (error) {
    console.error('Error verifying Google token:', error);
    return null;
  }
}