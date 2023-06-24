using System.ComponentModel.DataAnnotations;
using System.Runtime.Serialization;

namespace JewelryAPI.Models
{
    public class User
    {
        [Key]
        [DataMember]
        public int Id { get; set; }

        [DataMember]
        public string Name { get; set; } = "";

        [DataMember]
        public string Email { get; set; } = "";

        [DataMember]
        public string Password { get; set; } = "";
    }
}
