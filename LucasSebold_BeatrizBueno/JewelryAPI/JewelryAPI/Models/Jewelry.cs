using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Runtime.Serialization;

namespace JewelryAPI.Models
{
    public class Jewelry
    {
        [Key]
        [DataMember]
        public int JewelryId { get; set; }

        [DataMember]
        [Column(TypeName = "nvarchar(250)")]
        public string JewelryName { get; set; } = "";

        [DataMember]
        public float JewelryPrice { get; set; }

        [DataMember]
        public string Email { get; set; } = "";

        [DataMember]
        public string Password { get; set; } = "";
    }
}
