﻿// <auto-generated />
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.EntityFrameworkCore.Metadata;
using Microsoft.EntityFrameworkCore.Storage.ValueConversion;
using PetAPI.Models;

#nullable disable

namespace Clinivet1.Migrations
{
    [DbContext(typeof(APIdbcontext))]
    partial class APIdbcontextModelSnapshot : ModelSnapshot
    {
        protected override void BuildModel(ModelBuilder modelBuilder)
        {
#pragma warning disable 612, 618
            modelBuilder
                .HasAnnotation("ProductVersion", "6.0.16")
                .HasAnnotation("Relational:MaxIdentifierLength", 128);

            SqlServerModelBuilderExtensions.UseIdentityColumns(modelBuilder, 1L, 1);

            modelBuilder.Entity("PetAPI.Models.Pet", b =>
                {
                    b.Property<int>("PetId")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int");

                    SqlServerPropertyBuilderExtensions.UseIdentityColumn(b.Property<int>("PetId"), 1L, 1);

                    b.Property<string>("PetGender")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<float>("PetIdade")
                        .HasColumnType("real");

                    b.Property<string>("PetName")
                        .IsRequired()
                        .HasColumnType("nvarchar(250)");

                    b.Property<string>("PetObs")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("PetRaca")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("PetTutorCEP")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("PetTutorCPF")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("PetTutorCidade")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("PetTutorContato")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("PetTutorEndereco")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("PetTutorNome")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("PetTutorNumero")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<float>("PetWeight")
                        .HasColumnType("real");

                    b.HasKey("PetId");

                    b.ToTable("pets");
                });

            modelBuilder.Entity("UsuarioAPI.Models.Usuario", b =>
                {
                    b.Property<int>("UsuarioId")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int");

                    SqlServerPropertyBuilderExtensions.UseIdentityColumn(b.Property<int>("UsuarioId"), 1L, 1);

                    b.Property<string>("UsuarioCargo")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("UsuarioLogin")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("UsuarioName")
                        .IsRequired()
                        .HasColumnType("nvarchar(250)");

                    b.Property<string>("UsuarioSenha")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.HasKey("UsuarioId");

                    b.ToTable("usuarios");
                });
#pragma warning restore 612, 618
        }
    }
}
