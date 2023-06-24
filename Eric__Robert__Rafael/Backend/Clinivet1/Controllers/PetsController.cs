using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using PetAPI.Models;

namespace Clinivet1.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class PetsController : ControllerBase
    {
        private readonly APIdbcontext _context;

        public PetsController(APIdbcontext context)
        {
            _context = context;
        }

        // GET: api/Pets
        [HttpGet]
        public async Task<ActionResult<IEnumerable<Pet>>> Getpets()
        {
          // Se for nulo não retorna dados
          if (_context.pets == null)
          {
              return NotFound();
          }
            return await _context.pets.ToListAsync();
        }

        // GET: api/Pets/5
        // Get com parametro para retornar um dado específico
        [HttpGet("{id}")]
        public async Task<ActionResult<Pet>> GetPet(int id)
        {
          if (_context.pets == null)
          {
              return NotFound();
          }
            // Pega o valor do contexto vindo do banco de acordo com o Parametro
            var pet = await _context.pets.FindAsync(id);

            if (pet == null)
            {
                return NotFound();
            }
            //Retorna o valor encontrado
            return pet;
        }

        // PUT: api/Pets/5
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        // Put, passa parâmetro para editar o dado necessário
        [HttpPut("{id}")]
        public async Task<ActionResult> PutPet(int id, Pet pet)
        {
            if (id != pet.PetId)
            {
                return BadRequest();
            }
            // Adiciona as alterações ao contexto
            _context.Entry(pet).State = EntityState.Modified;

            try
            {
                // Salva
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {  
                //Caso não exista
                if (!PetExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return NoContent();
        }

        // POST: api/Pets
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        [HttpPost]
        public async Task<ActionResult<Pet>> PostPet(Pet pet)
        {
          if (_context.pets == null)
          {
              return Problem("Entity set 'APIdbcontext.pets'  is null.");
          }
            _context.pets.Add(pet);
            await _context.SaveChangesAsync();

            return CreatedAtAction("GetPet", new { id = pet.PetId }, pet);
        }

        // DELETE: api/Pets/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> DeletePet(int id)
        {
            if (_context.pets == null)
            {
                return NotFound();
            }
            var pet = await _context.pets.FindAsync(id);
            if (pet == null)
            {
                return NotFound();
            }

            _context.pets.Remove(pet);
            await _context.SaveChangesAsync();

            return NoContent();
        }

        private bool PetExists(int id)
        {
            return (_context.pets?.Any(e => e.PetId == id)).GetValueOrDefault();
        }
    }
}
