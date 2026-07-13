import { useState, useEffect } from 'react'

export default function Dashboard() {
  const [user, setUser] = useState(null)
  const [error, setError] = useState('')

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/user', {
      credentials: 'include',
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error('Not authenticated')
        }
        return response.json()
      })
      .then((data) => setUser(data))
      .catch(() => setError('Please login first.'))
  }, [])

  return (
    <main className="auth-page">
      <h1>Dashboard</h1>
      {error && <p className="error-message">{error}</p>}
      {user ? (
        <div>
          <p>Welcome, {user.name || user.email}!</p>
          <p>Your email: {user.email}</p>
        </div>
      ) : (
        <p>Loading user data...</p>
      )}
    </main>
  )
}
