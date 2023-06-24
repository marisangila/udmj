using Microsoft.EntityFrameworkCore;
using UsuarioAPI.Models;

namespace PetAPI.Models
{
    public class APIdbcontext : DbContext
    {
        public APIdbcontext(DbContextOptions option) : base(option)
        {

        }

        public DbSet<Pet> pets { get; set; }
        public DbSet<Usuario> usuarios { get; set; }

    }
}
