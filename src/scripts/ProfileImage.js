import React from "react"

function ProfileImage() {
  return (
    <div className="w-48 h-48 md:w-64 md:h-64 overflow-hidden rounded-full border-4 border-blue-600 shadow-lg">
      <img 
        src="https://i.imgur.com/XYZ123.jpg" // This URL should be replaced with your actual hosted image URL
        alt="Haytham Fourati" 
        className="w-full h-full object-cover"
      />
    </div>
  )
}

export default ProfileImage
