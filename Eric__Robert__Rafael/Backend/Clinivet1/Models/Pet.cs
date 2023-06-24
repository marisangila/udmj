using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Runtime.Serialization;

namespace PetAPI.Models
{
    //Criação da tabela e campos
    public class Pet
    {
        [Key]
        [DataMember]
        public int PetId { get; set; }

        [Required]
        [DataMember]
        [Column(TypeName = "nvarchar(250)")]
        public string PetName { get; set; } = "";

        [Required]
        [DataMember]
        public float PetWeight { get; set; }

        [Required]
        [DataMember]
        public string PetGender { get; set; } = "";


        [Required]
        [DataMember]
        public float PetIdade { get; set; }

        [Required]
        [DataMember]
        public string PetRaca { get; set; } = "";

        [Required]
        [DataMember]
        public string PetObs { get; set; } = "";

        [Required]
        [DataMember]
        public string PetTutorNome { get; set; } = "";

        [Required]
        [DataMember]
        public string PetTutorCPF { get; set; } = "";

        [Required]
        [DataMember]
        public string PetTutorContato { get; set; } = "";

        [Required]
        [DataMember]
        public string PetTutorCEP { get; set; } = "";

        [Required]
        [DataMember]
        public string PetTutorEndereco { get; set; } = "";

        [Required]
        [DataMember]
        public string PetTutorNumero { get; set; } = "";

        [Required]
        [DataMember]
        public string PetTutorCidade { get; set; } = "";



    }
}
